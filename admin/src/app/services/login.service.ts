import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class LoginService {

  constructor(private _http: Http) { }

  loginValidate(user) {
    let _headers = new Headers();
    _headers.append('Content-Type', 'application/json');
    return this._http.post('http://localhost:8060/iimattestation/api/login.php', user, { headers: _headers })
      .map(res => res.json());
  }

}
