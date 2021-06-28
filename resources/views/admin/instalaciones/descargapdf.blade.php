<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="{{asset('css/hoja.css')}}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{asset('images/favicon.png')}}">
      </div>
      <h1>HOJA DE TRABAJO - METÁLICAS FUEL</h1>
      <div id="company" class="clearfix">
        <div>Metálicas Fuel</div>
        <div>Calles Juan José Flores via al Aeropuerto,<br /> Contactos al cel: 0988513893, EC</div>
        <div>06 2987-717</div>
        <div><a href="metalicas_fuel@gmail.com">metalicas_fuel@gmail.com</a></div>
        <div>Tulcán - Ecuador.</div>
      </div>
      <div id="project">
        <div><span>ID</span>{{$instalacione->id}}</div>
        <div><span>OPERARIO</span>{{$instalacione->usuario->name}}</div>
        <div><span>CEL. OPE.</span>{{$instalacione->usuario->celular}}</div>
        <div><span>CLIENTE</span>{{$instalacione->cliente->cnombre." ".$instalacione->cliente->capellido}}</div>
        <div><span>CEL. CLI.</span>{{$instalacione->cliente->ccelular}}</div>
        <div><span>DIRECCIÓN</span>{{$instalacione->incalles. ", ".$instalacione->inciudad}}</div>
        <div><span>EMAIL</span> <a href="{{$instalacione->cliente->cemail}}">{{$instalacione->cliente->cemail}}</a></div>
        <div><span>FECHA</span>{{$instalacione->infecha}}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">TIPO</th>
            <th class="desc">DESCRIPCIÓN</th>
            <th class="desc">OBSERVACIÓN</th>
            <th class="service">ESTADO</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">{{$instalacione->intipo}}</td>
            <td class="desc">{{$instalacione->inindescripcion}}</td>
            <td class="desc">{{$instalacione->inobservacion}}</td>
            <td class="service">{{{$instalacione->estado}}}</td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"></td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"></td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td class="service"></td>
            <td class="desc"></td>
            <td class="unit"></td>
            <td class="qty"></td>
            <td class="total"></td>
          </tr>

          <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total"></td>
            <td class="grand total"></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTIFICACIÓN:</div>
        <div class="notice">El trabajo comenzara una vez agendado en el día a partir de las 9 de la mañana..</div>
      </div>
    </main>
    <footer>
      La hoja de trabajo se creó y agendo desde la plataforma valida sin sello y firma.
    </footer>
  </body>
</html>
