<?php

namespace App\Http\Middleware;

use App\Models\Encuesta;
use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EnsureEgresadoHasNotAnswer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Encuesta::select('id')->whereYear('created_at', now()->year)->where('user_id', auth()->user()->id)->get()->count()) {
            Alert::error('Lo sentimos!!!', 'Ya has realizado la encuesta del ' . now()->year . ' vuelve el proximo año')
                ->showConfirmButton('Entendido', '#4d0b28');
            return redirect(url()->previous());
        }
        return $next($request);
    }
}
