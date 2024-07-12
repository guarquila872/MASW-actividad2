import { Routes } from '@angular/router';
import {AgendaComponent} from './agenda/agenda.component';
import {CitaComponent} from './cita/cita.component';

export const routes: Routes = [
    { path: 'agenda-component', component: AgendaComponent },
    { path: 'cita-component', component: CitaComponent },
];
