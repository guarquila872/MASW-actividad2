import { Injectable } from '@angular/core';
import Swal from 'sweetalert2';

@Injectable({
  providedIn: 'root',
})
export class Alertas {
  
  ErrorAlRecuperarElementos() {
    Swal.fire({
      title: 'Oops....!',
      text: 'Error al intentar recuperar la información!',
      icon: 'error',
      confirmButtonColor: 'var(--color-terciario)',
      confirmButtonText: 'OK',
    });
  }
  ErrorAlRecuperarElementosError(cod:string,error:string) {
    Swal.fire({
      title: 'Error "'+cod+'"',
      text: error,
      icon: 'error',
      confirmButtonColor: 'var(--color-terciario)',
      confirmButtonText: 'OK',
    });
  }

  ErrorEnLaPeticion(mensaje: string) {
    Swal.fire({
        title: "Error inesperado!",
        text: mensaje,
        icon: "error",
        confirmButtonColor: "var(--color-terciario)",
        confirmButtonText: "OK"
      });
  }
  ExitoEnLaPeticion(mensaje: string) {
    Swal.fire({
        title: "Exito!",
        text: mensaje,
        icon: "success",
        confirmButtonColor: "var(--color-terciario)",
        confirmButtonText: "OK"
      });
  }
  

  NoExistenDatos() {
    Swal.fire('Oops....!', 'No Existen Datos?', 'warning');
  }


  


}
