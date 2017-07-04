import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { Routes, RouterModule } from '@angular/router';
import { ToastModule } from 'ng2-toastr/ng2-toastr';

import { LoginService } from './services/login.service';
import { LocalStorageService } from './services/local-storage.service';
import { CompanyService } from './services/company.service';

import { AppComponent } from './app.component';
import { LoginComponent } from './components/login/login.component';
import { DashboardComponent } from './components/dashboard/dashboard.component';
import { CompanyComponent } from './components/company/company.component';

const router: Routes = [
  { path: '', redirectTo: 'login', pathMatch: 'full' },
  { path: 'login', component: LoginComponent },
  { path: 'dashboard', component: DashboardComponent },
  { path: 'company-details', component: CompanyComponent }
]

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    DashboardComponent,
    CompanyComponent
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    FormsModule,
    HttpModule,
    ToastModule.forRoot(),
    RouterModule.forRoot(router)
  ],
  providers: [LoginService, LocalStorageService, CompanyService],
  bootstrap: [AppComponent]
})
export class AppModule { }
