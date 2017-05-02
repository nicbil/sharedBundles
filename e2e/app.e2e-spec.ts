import { AnCLIPage } from './app.po';

describe('an-cli App', function() {
  let page: AnCLIPage;

  beforeEach(() => {
    page = new AnCLIPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
