import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { RadioButtonModule } from 'primeng/radiobutton';
@Component({
  selector: 'app-agenda',
  standalone: true,
  imports: [FormsModule,RadioButtonModule],
  templateUrl: './agenda.component.html',
  styleUrl: './agenda.component.css'
})
export class AgendaComponent {
  ingredient:any;
}
