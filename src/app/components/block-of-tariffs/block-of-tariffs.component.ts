import { Component, OnInit } from '@angular/core';
import { IndexService } from '../../shared/index.service';

@Component({
  	selector: 'app-block-of-tariffs',
  	templateUrl: './block-of-tariffs.component.html',
  	styleUrls: ['./block-of-tariffs.component.sass'],
	providers: [IndexService]
})

export class BlockOfTariffsComponent implements OnInit {
	public tariffs;

  	constructor(private indexService: IndexService) {
      	this.tariffs = [];
  	}

  	ngOnInit() {
  		this.indexService.getAllTariffs().subscribe(
  			//tariffs => this.tariffs = tariffs

  			res => {
  				this.tariffs = res;
  				console.log(this.tariffs);
            	return this.tariffs; 
            }
		);
  	}
}