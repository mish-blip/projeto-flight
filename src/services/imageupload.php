<?php
namespace App\Services;

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class ImageUploadService
{
    public function __construct()
    {
        // carrega as credenciais do nosso novo arquivo de configuração
        $configValues = require __DIR__ . '/../../config/cloudinary.php';

        // configura a conexão com o Cloudinary
        Configuration::instance([
            'cloud' => [
                'cloud_name' => $configValues['cloud_name'],
                'api_key'    => $configValues['api_key'],
                'api_secret' => $configValues['api_secret']
            ],
            'url' => ['secure' => true]
        ]);
    }

    public function upload(array $file): ?string
    {
        if ($file && $file['error'] === UPLOAD_ERR_OK) {
            try {
                $result = (new UploadApi())->upload($file['tmp_name']);
                return $result['secure_url'];
            } catch (\Exception $e) {
                error_log('Erro no upload para o Cloudinary: ' . $e->getMessage());
                return null;
            }
        }
        return null;
    }
}