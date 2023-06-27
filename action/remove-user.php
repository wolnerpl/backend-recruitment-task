<?php
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $filePath = '../dataset/users.json';
        $file = file_get_contents($filePath);
        $data = json_decode($file, true);

        foreach ($data as $key => $record) {
            if ($record['id'] === $id) {
                echo $record['id'];
                unset($data[$key]);
            }
        }

        file_put_contents($filePath, json_encode(array_values($data)));
    }
    header('location: ../index.php');
    exit;