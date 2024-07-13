import {AgendaComponent} from './agenda/agenda.component';
import {CitaComponent} from './cita/cita.component';
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { ReactiveFormsModule } from '@angular/forms';  // Importa ReactiveFormsModule
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { PersonasComponent } from './Componentes/personas/personas.component';
import { InicioComponent } from './Componentes/inicio/inicio.component';

export const routes: Routes = [
  { path: '', redirectTo: 'inicio', pathMatch: 'full' },
  { path: 'inicio', component: InicioComponent },
  { path: 'personas', component: PersonasComponent },
  { path: 'agenda-component', component: AgendaComponent },
  { path: 'cita-component', component: CitaComponent },
];

@NgModule({
  declarations: [
   
  ],
  imports: [
    BrowserModule,
    ReactiveFormsModule,
    RouterModule.forRoot(routes)
  ],
  providers: [],
  bootstrap: [] 
})
export class AppModule { }
