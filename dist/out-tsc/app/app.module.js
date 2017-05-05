var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { AppRoutingModule, routingComponents } from './app.routing';
import { AppComponent } from './app.component';
import { IndexComponent } from './pages/index/index.component';
import { UserComponent } from './pages/user/user.component';
import { MainComponent } from './pages/main/main.component';
import { TopMenuComponent } from './components/top-menu/top-menu.component';
import { CenterMenuComponent } from './components/center-menu/center-menu.component';
import { BreadcrumbsNavigationComponent } from './components/breadcrumbs-navigation/breadcrumbs-navigation.component';
import { BlockOfTariffsComponent } from './components/block-of-tariffs/block-of-tariffs.component';
import { IndexService } from './shared/index.service';
export var AppModule = (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        NgModule({
            declarations: [
                AppComponent,
                IndexComponent,
                routingComponents,
                IndexComponent,
                UserComponent,
                MainComponent,
                TopMenuComponent,
                CenterMenuComponent,
                BreadcrumbsNavigationComponent,
                BreadcrumbsNavigationComponent,
                BlockOfTariffsComponent
            ],
            imports: [
                BrowserModule,
                FormsModule,
                HttpModule,
                AppRoutingModule
            ],
            providers: [
                IndexService
            ],
            bootstrap: [AppComponent]
        }), 
        __metadata('design:paramtypes', [])
    ], AppModule);
    return AppModule;
}());
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/app.module.js.map