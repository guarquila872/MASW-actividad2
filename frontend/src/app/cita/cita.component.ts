
import { BryntumCalendarModule } from '@bryntum/calendar-angular';
import { Component, ViewChild } from '@angular/core';
import { BryntumCalendarComponent, BryntumCalendarProjectModelComponent } from '@bryntum/calendar-angular';
import { calendarProps, projectProps } from '../app.config';


@Component({
  selector: 'app-cita',
  standalone: true,
  imports: [BryntumCalendarModule],
  templateUrl: './cita.component.html',
  styleUrls: ['./cita.component.css']
})
export class CitaComponent {
  resources = [
    {
        id         : 1,
        name       : 'Default Calendar',
        eventColor : 'green'
        
          
  
    }
];

  


events = [
    
];

calendarProps = calendarProps;
projectProps = projectProps;

@ViewChild('calendar') calendarComponent!: BryntumCalendarComponent;
@ViewChild('project') projectComponent!: BryntumCalendarProjectModelComponent;


}
