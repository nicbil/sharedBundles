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
import { IndexService } from '../../shared/index.service';
export var BlockOfTariffsComponent = (function () {
    function BlockOfTariffsComponent(indexService) {
        this.indexService = indexService;
        this.tariffs = [];
    }
    BlockOfTariffsComponent.prototype.ngOnInit = function () {
        var _this = this;
        this.indexService.getAllTariffs().subscribe(
        //tariffs => this.tariffs = tariffs
        function (res) {
            _this.tariffs = res;
            console.log(_this.tariffs);
            return _this.tariffs;
        });
    };
    BlockOfTariffsComponent = __decorate([
        Component({
            selector: 'app-block-of-tariffs',
            templateUrl: './block-of-tariffs.component.html',
            styleUrls: ['./block-of-tariffs.component.sass'],
            providers: [IndexService]
        }), 
        __metadata('design:paramtypes', [IndexService])
    ], BlockOfTariffsComponent);
    return BlockOfTariffsComponent;
}());
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/components/block-of-tariffs/block-of-tariffs.component.js.map