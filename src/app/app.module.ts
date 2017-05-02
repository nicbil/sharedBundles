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


@NgModule({
  declarations: [
      AppComponent,
      IndexComponent,
      routingComponents,
      IndexComponent,
      UserComponent,
      MainComponent,
      TopMenuComponent,
      CenterMenuComponent
  ],
  imports: [
      BrowserModule,
      FormsModule,
      HttpModule,
      AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
