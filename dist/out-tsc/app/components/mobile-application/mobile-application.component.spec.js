import { async, TestBed } from '@angular/core/testing';
import { MobileApplicationComponent } from './mobile-application.component';
describe('MobileApplicationComponent', function () {
    var component;
    var fixture;
    beforeEach(async(function () {
        TestBed.configureTestingModule({
            declarations: [MobileApplicationComponent]
        })
            .compileComponents();
    }));
    beforeEach(function () {
        fixture = TestBed.createComponent(MobileApplicationComponent);
        component = fixture.componentInstance;
        fixture.detectChanges();
    });
    it('should create', function () {
        expect(component).toBeTruthy();
    });
});
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/components/mobile-application/mobile-application.component.spec.js.map