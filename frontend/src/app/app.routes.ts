import { NgModule } from '@angular/core';
import { Routes } from '@angular/router';
import { PersonasComponent } from './Componentes/personas/personas.component';
import { InicioComponent } from './Componentes/inicio/inicio.component';

export const routes: Routes = [
  { path: '', redirectTo: 'inicio', pathMatch: 'full' },
  { path: 'inicio', component: InicioComponent },
  { path: 'personas', component: PersonasComponent }
];
