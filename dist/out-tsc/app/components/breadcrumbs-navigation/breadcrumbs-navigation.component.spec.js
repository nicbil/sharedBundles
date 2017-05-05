import { async, TestBed } from '@angular/core/testing';
import { BreadcrumbsNavigationComponent } from './breadcrumbs-navigation.component';
describe('BreadcrumbsNavigationComponent', function () {
    var component;
    var fixture;
    beforeEach(async(function () {
        TestBed.configureTestingModule({
            declarations: [BreadcrumbsNavigationComponent]
        })
            .compileComponents();
    }));
    beforeEach(function () {
        fixture = TestBed.createComponent(BreadcrumbsNavigationComponent);
        component = fixture.componentInstance;
        fixture.detectChanges();
    });
    it('should create', function () {
        expect(component).toBeTruthy();
    });
});
//# sourceMappingURL=C:/xampp/htdocs/sharedBundles/src/app/components/breadcrumbs-navigation/breadcrumbs-navigation.component.spec.js.map