<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class RestApiController extends AbstractController
{
    /**
     * @return Response
     * @Route("/api/product", name="api_product", methods={"GET"})
     */
    public function product(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $data = $em->getRepository(Product::class)->findAll();

        return $this->json([
            'data' => $data
        ]);
    }

    /**
     * @return Response
     * @Route("/api/detail", name="api_detail", methods={"POST"})
     */
    public function detail(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $data = $em->getRepository(Product::class);

        $value = json_decode($request->getContent(), true);

        $detail = $data->find($value['id']);

        return $this->json([
            'data' => $detail
        ]);
    }

    /**
     * @return Response
     * @Route("/api/new", name="api_new", methods={"POST"})
     */
    public function new(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $em = $doctrine->getManager();

        $product = new Product();
        $data = json_decode($request->getContent(), true);
        $errorMessages = [];

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'uuid':
                    if (!is_string($value)) {
                        $errorMessages[] = 'Uuid must be a string';
                    }
                    break;
                case 'name':
                    if (!is_string($value)) {
                        $errorMessages[] = 'Name must be a string';
                    }
                    break;
                case 'url':
                    if (!is_string($value)) {
                        $errorMessages[] = 'Url address must be a string';
                    }
                    break;
                case 'price':
                    if (!is_numeric($value)) {
                        $errorMessages[] = 'Price must be a number';
                    }
                    break;
                case 'visible':
                    if (!is_bool($value)) {
                        $errorMessages[] = 'Visible must be true or false';
                    }
                    break;
            }
        }

        $product->setUuid($data['uuid']);
        $product->setName($data['name']);
        $product->setUrl($data['url']);
        $product->setPrice((float) $data['price']);
        $product->setVisible((bool) $data['visible']);

        $errors = $validator->validate($product);
        if (count($errors) > 0 || count($errorMessages) > 0) {
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }

            return $this->json(['error_msg' => implode(", ", $errorMessages)], Response::HTTP_BAD_REQUEST);
        }

        $em->persist($product);
        $em->flush();

        return $this->json([
            'data' => $product
        ]);
    }

    /**
     * @return Response
     * @Route("/api/edit", name="api_edit", methods={"PUT"})
     */
    public function edit(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $em = $doctrine->getManager();
        $repo = $em->getRepository(Product::class);

        $data = json_decode($request->getContent(), true);
        $errorMessages = [];

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'uuid':
                    if (!is_string($value)) {
                        $errorMessages[] = 'Uuid must be a string';
                    }
                    break;
                case 'name':
                    if (!is_string($value)) {
                        $errorMessages[] = 'Name must be a string';
                    }
                    break;
                case 'url':
                    if (!is_string($value)) {
                        $errorMessages[] = 'Url address must be a string';
                    }
                    break;
                case 'price':
                    if (!is_numeric($value)) {
                        $errorMessages[] = 'Price must be a number';
                    }
                    break;
                case 'visible':
                    if (!is_bool($value)) {
                        $errorMessages[] = 'Visible must be boolean';
                    }
                    break;
            }
        }

        if (!isset($data['id'])) {
            return $this->json(['error_msg' => "You have to fill id first"]);
        }

        $product = $repo->find($data['id']);

        if ($product == NULL) {
            return $this->json(['error_msg' => "Id not found"]);
        }

        foreach ($data as $key => $value) {
            switch ($key) {
                case 'uuid':
                    if (isset($value)) {
                        $product->setUuid($value);
                    }
                    break;
                case 'name':
                    if (isset($value)) {
                        $product->setName($value);
                    }
                    break;
                case 'url':
                    if (isset($value)) {
                        $product->setUrl($value);
                    }
                    break;
                case 'price':
                    if (isset($value)) {
                        $product->setPrice($value);
                    }
                    break;
                case 'visible':
                    if (isset($value)) {
                        $product->setVisible($value);
                    }
                    break;
            }
        }

        $errors = $validator->validate($product);
        if (count($errors) > 0 || count($errorMessages) > 0) {
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }

            return $this->json(['error_msg' => implode(", ", $errorMessages)], Response::HTTP_BAD_REQUEST);
        }

        $em->persist($product);
        $em->flush();

        return $this->json([
            'data' => $product
        ]);
    }
}
