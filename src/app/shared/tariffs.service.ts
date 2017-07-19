export class TariffsService {

  private data: any[] = [{
      name: "Семья 1",
      code: 'SMP1',
      price: '14,90',
      dis_price: '10,50',
      minutes: 400,
      plus_minutes: "",
      internet: 4
    },{
      name: "Семья 2",
      code: 'SMP2',
      price: '24,90',
      dis_price: '17,50',
      minutes: 800,
      plus_minutes: "",
      internet: 8
    },{
      name: "Семья 3",
      code: 'SMP3',
      price: '34,90',
      dis_price: '24.50',
      minutes: 1200,
      plus_minutes: "",
      internet: 12
    },{
      name: "Мультинет",
      code: 'SMPN',
      price: '14,90',
      dis_price: '7.50',
      minutes: 200,
      plus_minutes: "+ 200",
      internet: 20
    }
  ];

  getTariffs(): any[] {
    return this.data;
  }
}