<?php

namespace App\Http\Controllers;

use App\Books;

class V5Controller extends Controller
{
  public function index()
  {
    $persons = array(
      #Nafn, mynd, frekari upplýsingar, fæðingaár, land uppruna
      array(
        'Gabe Newell',
        'https://www.playerattack.com/imagery/2013/02/GabeNewell-Valve-Bafta.jpg',
        'Gabe Logan Newell, often nicknamed Gaben, is an American computer programmer and businessman who is best known as the co-founder and president of the video game development and digital distribution company Valve Corporation.',
        'November 3, 1962',
        'U.S.A'
      ),
      
      array(
        'Keiichi Tsuchiya',
        'https://toyotamotors.ph/wp-content/uploads/2016/03/keiichi.jpg',
        'Keiichi Tsuchiya is a professional race car driver. He is also known as the Drift King for his nontraditional use of drifting in non-drifting racing events and his role in popularizing drifting as a motorsport. He is also known for touge driving.',
        'January 30, 1956',
        'Japan'
      )
    );
    
    
    return view('person.index', compact('persons'));
  }
  
  public function show($id)
  {
    $persons = array(
      #Nafn, mynd, frekari upplýsingar, fæðingaár, land uppruna
      array(
        'Gabe Newell',
        'https://www.playerattack.com/imagery/2013/02/GabeNewell-Valve-Bafta.jpg',
        'Gabe Logan Newell, often nicknamed Gaben, is an American computer programmer and businessman who is best known as the co-founder and president of the video game development and digital distribution company Valve Corporation.',
        'November 3, 1962',
        'U.S.A'
      ),
      
      array(
        'Keiichi Tsuchiya',
        'https://toyotamotors.ph/wp-content/uploads/2016/03/keiichi.jpg',
        'Keiichi Tsuchiya is a professional race car driver. He is also known as the Drift King for his nontraditional use of drifting in non-drifting racing events and his role in popularizing drifting as a motorsport. He is also known for touge driving.',
        'January 30, 1956',
        'Japan'
      )
    );
    
    return view('person.show', compact('persons', 'id'));
  }
}