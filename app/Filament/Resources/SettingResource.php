<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Admin Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('site_title')->label('Site Title'),
                Forms\Components\TextInput::make('description')->label('Description'),
                Forms\Components\TextInput::make('address')->label('Address'),
                Forms\Components\TextInput::make('social_media')->label('Social Media Links'),
                Forms\Components\TextInput::make('google_map')->label('Google Map Embed Code'),
                Forms\Components\RichEditor::make('contact_details')->label('Contact Details'),
                Forms\Components\TextInput::make('phone')->label('Phone Number'),
                Forms\Components\TextInput::make('mobile_number')->label('Mobile Number'),
                Forms\Components\TextInput::make('email')->label('Email Address'),
                Forms\Components\RichEditor::make('footer_text')->label('Footer Text'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('site_title'),
                TextColumn::make('description'),
                TextColumn::make('address'),
                TextColumn::make('social_media'),
                TextColumn::make('google_map'),
                TextColumn::make('contact_details'),
                TextColumn::make('phone'),
                TextColumn::make('mobile_number'),
                TextColumn::make('email'),
                TextColumn::make('footer_text'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
