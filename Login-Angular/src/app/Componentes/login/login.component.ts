import { Component, OnInit } from '@angular/core';
import {Http} from "@angular/http";

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  correo:string;
  password:string;
  constructor(private _http:Http) { }

  ngOnInit() {
  }

  logearse(){
    let usuario = {
      correo:this.correo,
      password:this.password,

    };
    this._http
      .post("http://localhost/login-angular-codeIgniter/CodeIgniter-3.1.8/auth/logIn?",usuario)
      .subscribe(
        (response)=>{
          console.log("Response:",response);

          console.log(response.json());

          let respuesta = response.json();

          console.log(respuesta.next);

        },
        (error)=>{
          console.log("Error:",error);
        },
        ()=>{
          console.log("Finally");
        }

      )

  }

  desLogearse(){

  }

}
