var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
import { Component, ViewChild } from '@angular/core';
import { ModalsComponent } from '../modals/modals.component';
export var BreadcrumbsNavigationComponent = (function () {
    function BreadcrumbsNavigationComponent() {
    }
    BreadcrumbsNavigationComponent.prototype.ngOnInit = function () {
    };
    BreadcrumbsNavigationComponent.prototype.buttonGoToManagement = function () {
        console.log(this.modalsComponent);
        this.modalsComponent.modal = "modal_auth";
    };
    __decorate([
        ViewChild(ModalsComponent), 
        __metadata('design:type', ModalsComponent)
    ], BreadcrumbsNavigationComponent.prototype, "modalsComponent", void 0);
    BreadcrumbsNavigationComponent = __decorate([
        Component({
            selector: 'app-breadcrumbs-navigation',
            templateUrl: './breadcrumbs-navigation.component.html',
            styleUrls: ['./breadcrumbs-navigation.component.sass']
        }), 
        __metadata('design:paramtypes', [])
    ], BreadcrumbsNavigationComponent);
    return BreadcrumbsNavigationComponent;
}());
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/components/breadcrumbs-navigation/breadcrumbs-navigation.component.js.map