var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
import { Component } from '@angular/core';
export var ModalsComponent = (function () {
    function ModalsComponent() {
        this.modal = '';
        this.authObj = {
            'code_phone': 25,
            'phone': '6257272',
            'password': '59887072'
        };
        this.phoneMask = [/\d/, /\d/, /\d/, /\d/, /\d/, /\d/, /\d/];
    }
    ModalsComponent.prototype.ngOnInit = function () { };
    ModalsComponent.prototype.authentication = function () {
        console.log(this.authObj);
    };
    ModalsComponent = __decorate([
        Component({
            selector: 'app-modals',
            templateUrl: './modals.component.html',
            styleUrls: ['./modals.component.sass']
        }), 
        __metadata('design:paramtypes', [])
    ], ModalsComponent);
    return ModalsComponent;
}());
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/components/modals/modals.component.js.map