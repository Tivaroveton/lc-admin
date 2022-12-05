<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use Input;
use Exception;

class Blog extends Component
{
    public function render()
    {

        //connect to DB                 
        try {
            if (DB::connection()->getPdo()) {
                echo "Successfully connected to the database => "
                    . DB::connection()->getDatabaseName();
            }
        } catch (Exception $e) {
            echo "Unable to connect";
        }
        $results = DB::select('select * from blog where id = ?', array(1));
        return view('livewire.blog', $results);
    }

    public function multiple_upload()
    {
        include_once 'dbConfig.php';

        if (isset($_POST['submit'])) {
            // File upload configuration 
            $targetDir = "uploads/";
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            $fileNames = array_filter($_FILES['files']['name']);
            if (!empty($fileNames)) {
                foreach ($_FILES['files']['name'] as $key => $val) {
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql 
                            $insertValuesSQL .= "('" . $fileName . "', NOW()),";
                        } else {
                            $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                        }
                    } else {
                        $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                    }
                }

                // Error message 
                $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
                $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
                $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

                if (!empty($insertValuesSQL)) {
                    $insertValuesSQL = trim($insertValuesSQL, ',');
                    // Insert image file name into database 
                    $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES $insertValuesSQL");
                    if ($insert) {
                        $statusMsg = "Files are uploaded successfully." . $errorMsg;
                    } else {
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                } else {
                    $statusMsg = "Upload failed! " . $errorMsg;
                }
            } else {
                $statusMsg = 'Please select a file to upload.';
            }
        }
    }
    //Block Data Mock 
}
