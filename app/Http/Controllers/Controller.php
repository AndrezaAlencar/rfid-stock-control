<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use OpenApi\Annotations as OA;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @OA\Info(
     *     title="RFID Stock Control API",
     *     version="1.0.0",
     *     description="Documentação da API do sistema de controle de estoque RFID",
     *     termsOfService="http://swagger.io/terms/",
     *     @OA\Contact(
     *         email="suporte@rfidstockcontrol.com"
     *     ),
     *     @OA\License(
     *         name="MIT",
     *         url="https://opensource.org/licenses/MIT"
     *     )
     * )
     */

}
