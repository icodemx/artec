<?php namespace Icodemx\Artec\Components;

use Cms\Classes\ComponentBase;

class Contacto extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contacto Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onSend()
    {
        $vars = post();
        \Mail::send('icodemx.artec::mail.contacto', $vars, function ($message) {
            $message->subject('Nueva solicitud de contacto');
            $message->to('artecdemexico@gmail.com');
        });
        \Flash::success('Mensaje enviado, gracias.');
    }
}
