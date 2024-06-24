<?php

namespace App\Http\Controllers\Formularios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
class ContactoController extends Controller
{

    public function suscripcion(Request $request)
    {
        // Validar el correo electrónico
        $validatedData = $request->validate([
            'email' => 'required|email|max:255'
        ]);

        // Enviar el correo electrónico
        Mail::send('emails.subscription', [], function($message) use ($validatedData) {
            $message->to($validatedData['email'])
                    ->subject('Gracias por suscribirte a nuestro boletín');
        });

        // Enviar notificación a la organización
        Mail::raw("Nuevo suscriptor al boletín:\nEmail: {$validatedData['email']}", function($message) use ($validatedData) {
            $message->to('info@msiguayaquil.com')
                    ->subject('Nueva suscripción al boletín');
        });

        if ($request->ajax()) {
            return response()->json(['message' => 'Te has suscrito con éxito. Pronto recibirás nuestras actualizaciones.'], 200);
        }

        // Redireccionar con mensaje de éxito
        return redirect()->back()->with('success', 'Te has suscrito con éxito. Pronto recibirás nuestras actualizaciones.');
    }

}
