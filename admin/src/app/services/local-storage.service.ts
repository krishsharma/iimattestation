import { Injectable } from '@angular/core';
import { tokenNotExpired } from 'angular2-jwt';

@Injectable()
export class LocalStorageService {

  constructor() { }

  setToken(token) {
    localStorage.setItem('id_token', token);
  }

  getToken() {
    localStorage.getItem('id_token');
  }

  unsetToken() {
    localStorage.clear();
  }

  isLoggedIn(token) {
    return tokenNotExpired(null, localStorage.getItem('id_token'));
  }

}
