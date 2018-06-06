import {RouterModule, Routes} from "@angular/router";
import {InicioComponent} from "./Componentes/inicio/inicio.component";
import {ModuleWithProviders} from "@angular/core";
import {LoginComponent} from "./Componentes/login/login.component";


export const routes:Routes =[
  {
    path:"inicio",
    component:InicioComponent,

  },
  {
    path:"login",
    component:LoginComponent
  },

];
export const ModuleDeRutas: ModuleWithProviders=RouterModule.forRoot(routes);
