var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import 'rxjs/add/operator/catch';
import 'rxjs/add/observable/throw';
export var IndexService = (function () {
    function IndexService(http) {
        this.http = http;
        this.apiUrl = '/sharedBundles/frontend/web/index.php?r=site%2Ftariffs';
    }
    IndexService.prototype.getAllTariffs = function () {
        return this.http.get(this.apiUrl)
            .map(function (res) { return res.json(); })
            .catch(this.handleError);
    };
    IndexService.prototype.handleError = function (error) {
        console.error('Erorr', error);
        return Observable.throw(error.message || error);
    };
    IndexService = __decorate([
        Injectable(), 
        __metadata('design:paramtypes', [Http])
    ], IndexService);
    return IndexService;
}());
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/shared/index.service.js.map