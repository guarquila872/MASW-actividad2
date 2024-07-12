import { ApplicationConfig, provideZoneChangeDetection } from '@angular/core';
import { provideRouter } from '@angular/router';

import { routes } from './app.routes';
import { BryntumCalendarProps, BryntumProjectComboProps } from '@bryntum/calendar-angular';

export const projectProps: BryntumProjectComboProps = {
  // Empty project config
};

export const calendarProps: BryntumCalendarProps = {
  date : new Date(2024, 6, 12),
  
  
    
  modes : {
    day : {
        dayStartTime : 9,
        dayEndTime:5
    },
    week : {
        dayStartTime : 8
    },
    agenda : null,
    month  : null,
    year   : null
},
crudManager:{
  eventStore : {
    fields : [
        { name : 'room' },
        { name : 'rsvp' }
    ]
},
transport : {
    load : {
        url : 'data/data.json'
    }
},
autoLoad : true
}


};
export const appConfig: ApplicationConfig = {
  providers: [provideZoneChangeDetection({ eventCoalescing: true }), provideRouter(routes)]
};
