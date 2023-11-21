<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!DOCTYPE HTML>
    <html lang="es">
        <head>
            <title> inicio sesion </title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous" />
        </head>
        
    <div class="text-center"><h1> inicio sesion</h1></div>
    
    <form method="POST" action="{{route('inicia-sesion')}}">
        @csrf
        <label for="name" class="form-lavel">name</label>
        <input type="name" class="form-label" id="nombreInnput" name="name" required autocomplete="disabled">
        <label for="password" class="form-lavel">password</label>
        <input type="password" class="form-label" id="password" name="password" required autocomplete="disabled">
        <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
        <label class="form-check-label" for="rememberCheck"> mantener sesion iniciada </label>
    <div>  <button type="submit">Inicia sesion</button></div>
</form>


            </div>
         <a href="{{route('registro')}}"> <button type="button">Registrar</button></a> 
            </div>
      </body>
    </html>