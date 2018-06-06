import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import {ModuleDeRutas} from "./routes";
import {HttpModule} from "@angular/http";
import { InicioComponent } from './Componentes/inicio/inicio.component';
import { LoginComponent } from './Componentes/login/login.component';

@NgModule({
  declarations: [
    AppComponent,
    InicioComponent,
    LoginComponent
  ],
  imports: [
    BrowserModule,
    HttpModule,
    ModuleDeRutas
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
