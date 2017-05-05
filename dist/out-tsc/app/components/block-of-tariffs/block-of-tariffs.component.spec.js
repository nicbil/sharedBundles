import { async, TestBed } from '@angular/core/testing';
import { BlockOfTariffsComponent } from './block-of-tariffs.component';
describe('BlockOfTariffsComponent', function () {
    var component;
    var fixture;
    beforeEach(async(function () {
        TestBed.configureTestingModule({
            declarations: [BlockOfTariffsComponent]
        })
            .compileComponents();
    }));
    beforeEach(function () {
        fixture = TestBed.createComponent(BlockOfTariffsComponent);
        component = fixture.componentInstance;
        fixture.detectChanges();
    });
    it('should create', function () {
        expect(component).toBeTruthy();
    });
});
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/components/block-of-tariffs/block-of-tariffs.component.spec.js.map