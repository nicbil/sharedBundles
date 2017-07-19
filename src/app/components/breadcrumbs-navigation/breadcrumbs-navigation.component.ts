import {Component, AfterViewInit, ViewChild, ElementRef, OnInit} from '@angular/core';
import { ModalsComponent } from '../modals/modals.component';

@Component({
	selector: 'app-breadcrumbs-navigation',
  	templateUrl: './breadcrumbs-navigation.component.html',
  	styleUrls: ['./breadcrumbs-navigation.component.sass']
})

export class BreadcrumbsNavigationComponent implements OnInit {
  	constructor() { }

	ngOnInit() {
  	}

 	@ViewChild(ModalsComponent)
  	private modalsComponent: ModalsComponent;

	buttonGoToManagement() {
		console.log(this.modalsComponent);
		this.modalsComponent.modal = "modal_auth";
	}
}
