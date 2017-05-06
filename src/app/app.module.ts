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
import { BreadcrumbsNavigationComponent } from './components/breadcrumbs-navigation/breadcrumbs-navigation.component';
import { BlockOfTariffsComponent } from './components/block-of-tariffs/block-of-tariffs.component';
import { IndexService } from './shared/index.service';
import { MobileApplicationComponent } from './components/mobile-application/mobile-application.component';
import { FooterComponent } from './components/footer/footer.component';

@NgModule({
  declarations: [
      AppComponent,
      IndexComponent,
      routingComponents,
      IndexComponent,
      UserComponent,
      MainComponent,
      TopMenuComponent,
      CenterMenuComponent,
      BreadcrumbsNavigationComponent,
      BreadcrumbsNavigationComponent,
      BlockOfTariffsComponent,
      MobileApplicationComponent,
      FooterComponent
  ],
  imports: [
      BrowserModule,
      FormsModule,
      HttpModule,
      AppRoutingModule
  ],
  providers: [
    IndexService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
