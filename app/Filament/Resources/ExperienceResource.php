<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\Experience;
use App\Models\ExperienceType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\TrashedFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-map';

    protected static ?string $navigationGroup = 'Experiences Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (string $context, $state, callable $set) {
                                if ($context === 'create') {
                                    $set('slug', Str::slug($state));
                                }
                            }),
                        
                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(Experience::class, 'slug', ignoreRecord: true)
                            ->disabled(fn ($context) => $context === 'edit'),
                        
                        Forms\Components\TextInput::make('subtitle')
                            ->maxLength(255)
                            ->placeholder('e.g., Flavors, Freshness & Family'),
                        
                        Forms\Components\Textarea::make('short_summary')
                            ->rows(3)
                            ->maxLength(65535),
                        
                        Forms\Components\Toggle::make('is_published')
                            ->default(false),
                        
                        Forms\Components\TextInput::make('sort_order')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Content')
                    ->schema([
                        Forms\Components\Textarea::make('body')
                            ->rows(10)
                            ->columnSpanFull(),
                        
                        Forms\Components\Repeater::make('inclusions')
                            ->schema([
                                Forms\Components\TextInput::make('item')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->addActionLabel('Add inclusion')
                            ->collapsible()
                            ->columnSpanFull(),
                        
                        Forms\Components\Repeater::make('exclusions')
                            ->schema([
                                Forms\Components\TextInput::make('item')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->addActionLabel('Add exclusion')
                            ->collapsible()
                            ->columnSpanFull(),
                        
                        Forms\Components\Textarea::make('what_to_wear')
                            ->label('What to Wear')
                            ->rows(2)
                            ->placeholder('e.g., Light, comfortable clothing, closed shoes')
                            ->columnSpanFull(),
                        
                        Forms\Components\Textarea::make('accessibility_info')
                            ->label('Accessibility Information')
                            ->rows(2)
                            ->placeholder('e.g., Wheelchair-accessible seating and restrooms')
                            ->columnSpanFull(),
                        
                        Forms\Components\Textarea::make('booking_policy')
                            ->label('Booking Policy')
                            ->rows(2)
                            ->placeholder('e.g., Pre-Order Only | 24hrs Prior | Custom Orders Welcome')
                            ->columnSpanFull(),
                        
                        Forms\Components\Textarea::make('good_to_know')
                            ->label('Good to Know')
                            ->rows(3)
                            ->columnSpanFull(),
                        
                        Forms\Components\Repeater::make('traveler_qa')
                            ->label('Traveler Q&A')
                            ->schema([
                                Forms\Components\TextInput::make('question')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('answer')
                                    ->required()
                                    ->rows(2),
                            ])
                            ->addActionLabel('Add Q&A')
                            ->collapsible()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Practical Information')
                    ->schema([
                        Forms\Components\Select::make('experience_type_id')
                            ->label('Experience Type')
                            ->relationship('experienceType', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('description')
                                    ->rows(2),
                                Forms\Components\TextInput::make('icon')
                                    ->placeholder('e.g., heroicon-o-map'),
                                Forms\Components\Toggle::make('is_active')
                                    ->default(true),
                            ])
                            ->placeholder('Select or create an experience type'),
                        
                        Forms\Components\TextInput::make('type')
                            ->label('Legacy Type (for backward compatibility)')
                            ->maxLength(255)
                            ->placeholder('Keep existing string-based type if needed'),
                        
                        Forms\Components\TextInput::make('duration_label')
                            ->label('Duration')
                            ->placeholder('e.g., 2–3 hours, 45 minutes – 1 hour')
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('group_size')
                            ->label('Group Size')
                            ->placeholder('e.g., 2–8 guests, Flexible (individuals to large groups)')
                            ->maxLength(255),
                        
                        Forms\Components\Select::make('difficulty_level')
                            ->label('Difficulty Level')
                            ->options([
                                'Easy' => 'Easy',
                                'Moderate' => 'Moderate',
                                'Challenging' => 'Challenging',
                                'Easy (climbing optional)' => 'Easy (climbing optional)',
                                'Easy (tree climbing optional)' => 'Easy (tree climbing optional)',
                                'Easy (stairs required for tree house)' => 'Easy (stairs required for tree house)',
                            ])
                            ->default('Easy'),
                        
                        Forms\Components\TextInput::make('base_price')
                            ->label('Base Price')
                            ->numeric()
                            ->prefix('$')
                            ->step(0.01),
                        
                        Forms\Components\Toggle::make('show_price_publicly')
                            ->label('Show Price Publicly')
                            ->default(false),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('hero_image_path')
                            ->label('Hero Image')
                            ->disk('public')
                            ->directory('experiences/hero')
                            ->image()
                            ->imageEditor()
                            ->columnSpanFull(),
                        
                        Forms\Components\FileUpload::make('gallery')
                            ->multiple()
                            ->disk('public')
                            ->directory('experiences/gallery')
                            ->image()
                            ->imageEditor()
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('SEO')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->maxLength(255),
                        
                        Forms\Components\Textarea::make('meta_description')
                            ->rows(3)
                            ->maxLength(65535),
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('hero_image_path')
                    ->label('Hero Image')
                    ->disk('public')
                    ->height(60)
                    ->width(80),
                
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('experienceType.name')
                    ->label('Type')
                    ->badge()
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                
                Tables\Columns\TextColumn::make('duration_label')
                    ->label('Duration')
                    ->searchable()
                    ->toggleable(),
                
                Tables\Columns\TextColumn::make('difficulty_level')
                    ->label('Difficulty')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Easy' => 'success',
                        'Moderate' => 'warning',
                        'Challenging' => 'danger',
                        default => 'gray',
                    })
                    ->toggleable(),
                
                Tables\Columns\TextColumn::make('base_price')
                    ->label('Price')
                    ->money('USD')
                    ->sortable()
                    ->toggleable(),
                
                Tables\Columns\IconColumn::make('show_price_publicly')
                    ->label('Price Public')
                    ->boolean()
                    ->toggleable(),
                
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean()
                    ->sortable()
                    ->toggleable(),
                
                Tables\Columns\TextColumn::make('sort_order')
                    ->numeric()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_published')
                    ->options([
                        '1' => 'Published',
                        '0' => 'Unpublished',
                    ]),
                Tables\Filters\SelectFilter::make('experience_type_id')
                    ->label('Experience Type')
                    ->relationship('experienceType', 'name')
                    ->searchable()
                    ->preload(),
                Tables\Filters\SelectFilter::make('difficulty_level')
                    ->options([
                        'Easy' => 'Easy',
                        'Moderate' => 'Moderate',
                        'Challenging' => 'Challenging',
                    ]),
                TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->defaultSort('sort_order');
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
