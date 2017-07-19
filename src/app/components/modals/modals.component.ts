import { Component, ViewChild, OnInit, Input, Output, OnChanges, EventEmitter } from '@angular/core';
import {Popup} from 'ng2-opd-popup';

@Component({
  	selector: 'app-modals',
		templateUrl: './modals.component.html',
  	styleUrls: ['./modals.component.sass']
})

export class ModalsComponent implements OnInit {
	modal : string = '';
	private authObj: any = {
		'code_phone': 25,
		'phone': '6257272',
		'password': '59887072'
	};
	private phoneMask: any = [/\d/, /\d/, /\d/, /\d/, /\d/, /\d/, /\d/];

	constructor() { }
	ngOnInit() {}

	authentication() {
		console.log(this.authObj);
	}
}