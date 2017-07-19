import { Component, OnInit } from '@angular/core';
import { IndexService } from '../../shared/index.service';
import { TariffsService } from '../../shared/tariffs.service';

@Component({
  	selector: 'app-block-of-tariffs',
  	templateUrl: './block-of-tariffs.component.html',
  	styleUrls: ['./block-of-tariffs.component.sass'],
		providers: [IndexService, TariffsService]
})

export class BlockOfTariffsComponent implements OnInit {
	public tariffs;

  	constructor(private tariffsService: TariffsService) {
      	this.tariffs = this.tariffsService.getTariffs();
  	}
  	
  	ngOnInit() {

  	}
}