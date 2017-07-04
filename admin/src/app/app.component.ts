import { Component } from '@angular/core';
import { LocalStorageService } from './services/local-storage.service';
import {Router} from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  constructor(private _localStorage: LocalStorageService,private _router: Router) {}
  logout() {
    this._localStorage.unsetToken();
    this._router.navigate(['/login']);
    return false;
  }
}
