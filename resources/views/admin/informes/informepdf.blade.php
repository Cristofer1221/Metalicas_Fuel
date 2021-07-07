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
      <h1>INFORME DE TRABAJO - METÁLICAS FUEL</h1>
      <div id="company" class="clearfix">
        <div>Metálicas Fuel</div>
        <div>Calles Juan José Flores via al Aeropuerto,<br /> Contactos al cel: 0988513893, EC</div>
        <div>06 2987-717</div>
        <div><a href="metalicas_fuel@gmail.com">metalicas_fuel@gmail.com</a></div>
        <div>Tulcán - Ecuador.</div>
      </div>
      <div id="project">

        <div><span>ID</span>{{$informe->id}}</div>
        <div><span>OPERARIO</span>{{$informe->instalacions->usuario->name}}</div>
        <div><span>CEL. OPE.</span>{{$informe->instalacions->usuario->celular}}</div>
        <div><span>CLIENTE</span>{{$informe->instalacions->cliente->cnombre." ".$informe->instalacions->cliente->capellido}}</div>
        <div><span>CEL. CLI.</span>{{$informe->instalacions->cliente->ccelular}}</div>
        <div><span>DIRECCIÓN</span>{{$informe->instalacions->incalles. ", ".$informe->inciudad}}</div>
        <div><span>EMAIL</span> <a href="{{$informe->instalacions->cliente->cemail}}">{{$informe->instalacions->cliente->cemail}}</a></div>
        <div><span>FECHA</span>{{$informe->instalacions->infecha}}</div>

      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">FECHA INFO.</th>
            <th class="desc">DESCRIPCIÓN</th>
            <th class="desc">OBSERVACIÓN</th>
            <th class="service">ESTADO</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">{{$informe->ifecha}}</td>
            <td class="desc">{{$informe->idescripcion}}</td>
            <td class="desc">{{$informe->iobservaciones}}</td>
            <td class="service">{{{$informe->iestado}}}</td>
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
        <div class="notice">El informe presentado será un respaldo en caso de pérdida de herramientas o eventualidades ajenas al trabajo...</div>
      </div>
    </main>
    <footer>
      METALICAS - FUEL.
    </footer>
  </body>
</html>
