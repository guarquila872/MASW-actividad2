import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { ResponseI } from './response.interface';
import { catchError, map, Observable } from 'rxjs';
import { Alertas } from '../Control/Alerts';

@Injectable({
  providedIn: 'root',
})
export class ApiService {
  constructor(private alerta: Alertas, private http: HttpClient) {}

  url: string = 'http://127.0.0.1:8000/api/';

  GetPersonas(codigo: number, rango: number): Observable<any> {
    console.log('tracks');
    let direccion = this.url + 'Personas';
    return this.http.get<any>(direccion).pipe(
      map((data) => {
        return data;
      }),
      catchError((error) => {
        this.alerta.ErrorAlRecuperarElementosError('EncriptarAES', error);
        throw error;
      })
    );
  }
}
