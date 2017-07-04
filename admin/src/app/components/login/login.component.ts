import { Component, OnInit, ViewContainerRef } from '@angular/core';
import { LoginService } from '../../services/login.service';
import { Router } from '@angular/router';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';
import { LocalStorageService } from '../../services/local-storage.service';

@Component({
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  constructor(
    private _loginService: LoginService,
    private _router: Router,
    public _toastr: ToastsManager,
    vcr: ViewContainerRef,
    private _token: LocalStorageService
  ) {
    this._toastr.setRootViewContainerRef(vcr);
  }

  ngOnInit() {
  }

  private username: String;
  private password: String;

  login() {
    const userData = {
      username: this.username,
      password: this.password
    }
    if (this.validateForm(userData) == true) {
      this._loginService.loginValidate(userData).subscribe(res => {
        if (res.status === true) {
          this._token.setToken(res.token);
          this._router.navigate(['dashboard']);
        } else {
          this._toastr.clearAllToasts();
          this._toastr.error(res.data);
        }
      })
    } else {
      this._toastr.clearAllToasts();
      this._toastr.error('Enter username and password');
    }
  }

  //Validate form
  validateForm(userData) {
    if (userData.username && userData.password) {
      return true;
    }
    return false;
  }

}
