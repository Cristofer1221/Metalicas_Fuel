<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Nota de Venta {{$venta->id}}</title>
    <link rel="stylesheet" href="{{asset('css/hoja.css')}}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="{{asset('images/favicon.png')}}">
      </div>
      <h1>NOTA DE VENTA - METÁLICAS FUEL</h1>
      <div id="company" class="clearfix">
        <div>Metálicas Fuel</div>
        <div>Calles Juan José Flores via al Aeropuerto,<br /> Contactos al cel: 0988513893, EC</div>
        <div>06 2987-717</div>
        <div><a href="metalicas_fuel@gmail.com">metalicas_fuel@gmail.com</a></div>
        <div>Tulcán - Ecuador.</div>
      </div>
      <div id="project">
        <div><span>ID</span>{{$venta->id}}</div>
        <div><span>CLIENTE</span>{{$venta->instalaciones->cliente->cnombre." ".$venta->instalaciones->cliente->capellido}}</div>
        <div><span>CEL. CLI.</span>{{$venta->instalaciones->cliente->ccelular}}</div>
        <div><span>EMAIL</span> <a href="{{$venta->instalaciones->cliente->cemail}}">{{$venta->instalaciones->cliente->cemail}}</a></div>
        <div><span>FECHA</span>{{$venta->vfecha}}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
              <th></th>
            <th>DETALLE</th>
            <th>CANTIDAD</th>
            <th>PRECIO</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
            <?$data = explode('#',$venta->vdetalle);
            if(empty($data[count($data)-1])) {
              unset($data[count($data)-1]);
          }
          ?>
          @foreach($data as $row){
              <tr>
              <?$row = explode('&',$row);?>
              <td>
              @foreach($row as $cell)
                  <td>
                  {{$cell}}
                  </td>
              @endforeach
              </tr>
          @endforeach


          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">{{$venta->vsubtotal}}</td>
          </tr>
          <tr>
            <td colspan="4">I.V.A 12%</td>
            <td class="total">{{$venta->viva}}</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">TOTAL</td>
            <td class="grand total">{{$venta->vtotal}}</td>
          </tr>

        </tbody>
      </table>

    </main>
    <footer>
      MetalicasFuel.
    </footer>
  </body>
</html>
