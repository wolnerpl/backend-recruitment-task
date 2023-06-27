<?php
    if (isset(
            $_POST['name'],
            $_POST['username'],
            $_POST['email'],
            $_POST['street'],
            $_POST['city'],
            $_POST['zipcode'],
            $_POST['phone'],
            $_POST['company']
        )
        && $_POST['name']
        && $_POST['username']
        && $_POST['email']
        && $_POST['street']
        && $_POST['city']
        && $_POST['zipcode']
        && $_POST['phone']
        && $_POST['company']
    ) {
        $filePath = '../dataset/users.json';
        $file = file_get_contents($filePath);
        $data = json_decode($file, true);
        $id = 0;

        foreach ($data as $record) {
            if ($record['id'] > $id) {
                $id = $record['id'];
            }
        }

        $data[] = [
            'id' => $id + 1,
            'name' => $_POST['name'],
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'address' => [
                'street' => $_POST['street'],
                'city' => $_POST['city'],
                'zipcode' => $_POST['zipcode'],
            ],
            'phone' => $_POST['phone'],
            'company' => [
                'name' => $_POST['company'],
            ]
        ];

        file_put_contents($filePath, json_encode($data));
    }
    header('location: ../index.php');
    exit;