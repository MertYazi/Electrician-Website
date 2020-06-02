<?php

namespace App\Traits;
use Illuminate\Http\Request;

trait ImageTrait{

  public function handle_image(Request $request, $object, $field)
  {
    if($field == 'references_cover' || $field == 'services_cover' || $field == 'about_cover' || $field == 'contact_cover'
    || $field == 'decide_image' || $field == 'reach_image' || $field == 'consult_image' || $field == 'get_service_image'
    || $field == 'generation_image' || $field == 'history_image' || $field == 'mission_image' || $field == 'vision_image'){    
      if(file_exists(public_path('img/' . $object->$field)) && $object->$field != null){
        unlink(public_path('img/' . $object->$field));
      }
      $field_name = str_replace('_', '-', $field);
      $object->$field = $field_name. '.' . $request[$field]->extension();
      $request[$field]->move(public_path('img'), $object->$field);
    }

    if($field == 'member_image'){
      if(file_exists(public_path('img/' . $object->$field)) && $object->$field != null){
        unlink(public_path('img/' . $object->$field));
      }
      $object->$field = $request['member_name'] . '-' . $request['member_surname'] . '.' . $request[$field]->extension();
      $request[$field]->move(public_path('img'), $object->$field);
    }

    if($field == 'slide_image'){
      if(file_exists(public_path('img/' . $object->slide_image)) && $object->$field != null){
        unlink(public_path('img/' . $object->slide_image));
      }
      $slide_name = str_replace(' ', '-', $request['slide_caption']);
      $object->$field = $slide_name . '.' . $request[$field]->extension();
      $request[$field]->move(public_path('img'), $object->$field);
    }

    if($field == 'service_image'){
      if(file_exists(public_path('img/' . $object->service_image)) && $object->$field != null){
        unlink(public_path('img/' . $object->service_image));
      }
      $service_name = str_replace(' ', '-', $request['service_title']);
      $object->$field = $service_name . '.' . $request[$field]->extension();
      $request[$field]->move(public_path('img'), $object->$field);
    }

    if($field == 'service_cover'){
      if(file_exists(public_path('img/' . $object->service_cover)) && $object->$field != null){
        unlink(public_path('img/' . $object->service_cover));
      }
      $service_name = str_replace(' ', '-', $request['service_title']);
      $object->$field = $service_name . '-cover' . '.' . $request[$field]->extension();
      $request[$field]->move(public_path('img'), $object->$field);
    }

    if($field == 'reference_image'){
      if(file_exists(public_path('img/' . $object->reference_image)) && $object->$field != null){
        unlink(public_path('img/' . $object->reference_image));
      }
      $reference_name = str_replace(' ', '-', $request['reference_title']);
      $object->$field = $reference_name . '.' . $request[$field]->extension();
      $request[$field]->move(public_path('img'), $object->$field);
    }

  }

}
