<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShiftResource\Pages;
use App\Filament\Resources\ShiftResource\RelationManagers;
use App\Models\Shift;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class ShiftResource extends Resource
{
    protected static ?string $model = Shift::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('shift_name')
                ->label('shift name')
                ->required()
                ->maxLength(255),
            Forms\Components\DatePicker::make('shit_date')
                ->label('shift date')
                ->required(),
            Forms\Components\TimePicker::make('start_time')
                ->label('start time')
                ->required()
,            Forms\Components\TimePicker::make('end_time')
                ->label('end time')
                ->required(),
          
            // Forms\Components\Select::make('stores')
            //     ->label('Stores')
            //     ->relationship('stores', 'name')
            //     ->multiple()
            //     // ->preload() // Optional: Preload options for better performance
            //     ->searchable(),
               
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('shift_name')
                ->label('shift Name')
                ->searchable()
                ->sortable(),
            TextColumn::make('shift_date')
                ->label('shift_date ')
                ->searchable()
                ->sortable(),
            TextColumn::make('start_time')
                ->label('start_time ')
                ->searchable()
                ->sortable(),
            TextColumn::make('end_time')
                ->label('end_time ')
                ->searchable()
                ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShifts::route('/'),
            'create' => Pages\CreateShift::route('/create'),
            'edit' => Pages\EditShift::route('/{record}/edit'),
        ];
    }
}
