import { async, TestBed } from '@angular/core/testing';
import { ModalsComponent } from './modals.component';
describe('ModalsComponent', function () {
    var component;
    var fixture;
    beforeEach(async(function () {
        TestBed.configureTestingModule({
            declarations: [ModalsComponent]
        })
            .compileComponents();
    }));
    beforeEach(function () {
        fixture = TestBed.createComponent(ModalsComponent);
        component = fixture.componentInstance;
        fixture.detectChanges();
    });
    it('should create', function () {
        expect(component).toBeTruthy();
    });
});
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/components/modals/modals.component.spec.js.map