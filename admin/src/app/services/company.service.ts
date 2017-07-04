import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';

@Injectable()
export class CompanyService {

  constructor(
    private _http: Http
  ) { }

  saveCompanyData(data) {
    let _headers = new Headers();
    _headers.append('Content-Type', 'application/json');
    return this._http.post('http://localhost:8060/iimattestation/api/save-company-details.php', data, { headers: _headers })
      .map(res => res.json());
  }

  getCompanyData() {
    return this._http.get('http://localhost:8060/iimattestation/api/get-company-details.php')
      .map(res => res.json());
  }

}
