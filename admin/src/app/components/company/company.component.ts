import { Component, OnInit, ViewContainerRef } from '@angular/core';
import { ToastsManager } from 'ng2-toastr/ng2-toastr';
import { CompanyService } from '../../services/company.service';

@Component({
  templateUrl: './company.component.html',
  styleUrls: ['./company.component.css']
})
export class CompanyComponent implements OnInit {

  private companyName: String;
  private companyWebsite: String;

  constructor(
    private _companyService: CompanyService,
    public _toastr: ToastsManager,
    vcr: ViewContainerRef
  ) {
    this._toastr.setRootViewContainerRef(vcr);
  }

  ngOnInit() {
    this._companyService.getCompanyData().subscribe(res => {
      this.companyName = res.name;
      this.companyWebsite = res.website;
    });
  }

  onSubmit() {
    this._toastr.clearAllToasts();
    const company = {
      name: this.companyName,
      website: this.companyWebsite
    }
    if (this.validateCompanyDetailsForm(company) === true) {
      this._companyService.saveCompanyData(company).subscribe(res => {
        console.log(res);
        if (res.status === true) {
          this._toastr.success(res.message);
        } else {
          this._toastr.error(res.message);
        }
      })
    } else {
      this._toastr.error('Enter details!');
    }
  }

  //Validate form
  validateCompanyDetailsForm(company) {
    if (company.name && company.website) {
      return true;
    }
    return false;
  }

}
