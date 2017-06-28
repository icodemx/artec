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
        $data = post();
        \Log::info($data);

        \Mail::send('icodemx.artec::mail.contacto', $data, function ($message) {
            $message->subject('Nueva solicitud de contacto');
            $message->to('rpamatzr@cdmx.gob.mx');
        });
    }
}
