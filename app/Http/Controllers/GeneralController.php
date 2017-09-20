<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Image;

class GeneralController extends Controller
{

  public function remover_espacos($texto) { return preg_replace('/\s/', '', $texto); }

  public function remover_acentos($texto, $charset = 'UTF-8') { return iconv($charset, 'ASCII//TRANSLIT', $texto); }

  public function salvaImagem($imagem, $caminho_imagem){
    if($imagem != NULL){
      $image_name_spaceless = (new GeneralController)->remover_espacos($imagem->getClientOriginalName());
      $image_name_normalized = (new GeneralController)->remover_acentos($image_name_spaceless);
      $filename = time().$image_name_normalized;

      $path = 'images/' . $caminho_imagem;
      $img_path = $path . time() . $filename;

      //cria o diretorio se o mesmo não existir
      //if (!is_dir($server_url.$path)){ mkdir($server_url."/".$path, 0775, true); }
      // Image::make($imagem->getRealPath())->save($path);
      Image::make($imagem)->save(public_path()."/".$img_path);
      return "/".$img_path;
    }

    return "";
  }
}
